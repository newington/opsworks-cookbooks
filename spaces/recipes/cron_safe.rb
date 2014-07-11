node[:deploy].each do |app_name, deploy_config|
  cron "import users" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake ldap:import_users"
    minute "8"
    hour "7,9,11,13,15"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "import groups" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake ldap:import_groups"
    minute "45"
    hour "8,10,12,14,16,18"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "sync everything" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake ldap:sync_everything"
    minute "15"
    hour "8,10,12,14,16,18"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "canvas - course IDs" do
    action :delete
  end

  cron "canvas - daily tasks" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake canvas:import_users canvas:import_courses canvas:import_inactive_courses"
    minute "10"
    hour "4"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "canvas - twice-daily tasks" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake canvas:import_enrolments"
    minute "30"
    hour "4,12"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "canvas - assignments" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake canvas:import_assignments"
    minute "20,50"
    hour "8-20"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "canvas - assignment submissions" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake canvas:import_submissions"
    minute "40"
    hour "8,11,14,17,20,23"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end
end
