#
# Cookbook Name:: simplesamlphp
# Attributes:: default
#
# Copyright 2013, Harrison Conlin
#
# Licensed under the MIT License
#


default[:deploy][:sso][:base_url] = "https://sso.newington.nsw.edu.au"
default[:deploy][:sso][:contact] = "SSO Admin"
default[:deploy][:sso][:email] = "ict@newington.nsw.edu.au"

default[:deploy][:sso][:ldap_search_base] = "OU=NC_Users,DC=newingtoncollege,DC=nsw,DC=edu,DC=au"
default[:deploy][:sso][:ldap_host] = "ldap.newington.nsw.edu.au" #ldap.newington.nsw.edu.au?
default[:deploy][:sso][:ldap_username] = "ldapservice"
default[:deploy][:sso][:ldap_password] = "some secure password"

default[:deploy][:sso][:password] = "some secure password"
default[:deploy][:sso][:secretsalt] = "some secure password"
