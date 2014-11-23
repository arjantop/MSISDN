Exec {
    path => [ "/bin/", "/sbin/" , "/usr/bin/", "/usr/sbin/", "/usr/local/bin/" ]
}

class { 'apt':
    always_apt_update => true,
}

apt::ppa { 'ppa:ondrej/php5-5.6':
    before  => Class['php'],
}

include php

class { ['php::fpm', 'php::cli', 'php::composer']: }

exec { 'install-app':
    command => 'sh /vagrant/scripts/build.sh',
    user => 'www-data',
    group => 'www-data',
    environment => ['HOME=/home/vagrant'],
    require => [ Class['php'], Class['php::composer'] ],
}

class { 'nginx': }

nginx::resource::vhost { 'vagrant':
    ensure => present,
    listen_port => 80,
    ipv6_enable => true,
    index_files => [ 'index.php' ],
    www_root => '/vagrant/public',
}

nginx::resource::location { 'php':
    ensure => present,
    www_root => '/vagrant/public',
    location => '~ \.php$',
    vhost => 'vagrant',
    fastcgi => 'unix:/var/run/php5-fpm.sock',
}
