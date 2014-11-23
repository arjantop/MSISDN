# == Class: php::cli::config
#
# Configure php.ini settings for a PHP SAPI
#
# === Parameters
#
# [*file*]
#   The path to ini file
#
# [*config*]
#   Array of augeas commands, one command per entry
#
# === Variables
#
# No variables
#
# === Examples
#
# TODO
#
# === Authors
#
# Christian "Jippi" Winther <jippignu@gmail.com>
#
# === Copyright
#
# Copyright 2012-2013 Christian "Jippi" Winther, unless otherwise noted.
#
define php::cli::config(
  $ensure   = 'present',
  $file = $php::cli::params::inifile,
  $config   = undef,
  $section  = 'PHP',
  $setting  = undef,
  $value    = undef,
) {

  php::config { $title:
    file    => $file,
    config  => $config,
    section => $section,
    setting => $setting,
    value   => $value,
    source  => 'cli',
  }

}
