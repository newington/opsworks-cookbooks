##!!
##!!  These cron jobs do bad things!
##!!
node[:deploy].each do |app_name, deploy_config|
  cron "send email digests" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake send_email_digests"
    minute "30"
    hour "16"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "comment recaps" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake send_comments_recap_emails"
    minute "15"
    hour "16"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "diary notifications - contacts" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake diary:notify_contacts"
    minute "00"
    hour "18"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end

  cron "diary notifications - mentors" do
    user "deploy"
    command "RAILS_ENV=#{deploy_config[:rails_env]} /usr/local/bin/bundle exec rake diary:notify_mentors"
    minute "20"
    hour "7,16"
    weekday "1-5"
    home "/var/www/spaces/current"
    path "/usr/local/bin:/usr/bin:/bin"
  end
end
