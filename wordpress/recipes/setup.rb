# Install all our shiny prerequesites for PHP with LDAP etc

%w(php-apc php5-mysql php5-gd php5-ldap libssh2-php).each do |pkg|
  package pkg do
    action :install
  end
end