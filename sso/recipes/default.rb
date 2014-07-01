#
# Cookbook Name:: simplesamlphp
# Recipe:: default
#
# Copyright 2013, Harrison Conlin
#
# Licensed under the MIT License

include_recipe "composer::install"

#TODO: I think this is a stupid pattern
node[:deploy].each do |app_name, deploy_config|
  composer_project "#{deploy_config[:deploy_to]}/current/"

  directory "#{deploy_config[:deploy_to]}/current/config" do
    owner "root"
    group "root"
    mode 0755
    action :create
  end

  remote_directory "#{deploy_config[:deploy_to]}/current/metadata" do
    source "metadata"
    purge true
  end

  remote_directory "#{deploy_config[:deploy_to]}/current/cert" do
    source "cert"
    purge true
  end

  template "#{deploy_config[:deploy_to]}/current/config/config.php" do
    source "config.php.erb"
    mode 0644
    owner "root"
    group "root"
  end

  template "#{deploy_config[:deploy_to]}/current/config/authsources.php" do
    source "authsources.php.erb"
    mode 0644
    owner "root"
    group "root"
  end

  file "#{deploy_config[:deploy_to]}/current/modules/ldap/enable" do
    action :create_if_missing
  end
end
