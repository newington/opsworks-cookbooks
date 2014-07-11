node[:deploy].each do |app_name, deploy_config|
  if deploy_config[:rails_env] == 'production'
    include_recipe "spaces::cron_dangerous"
  end
  include_recipe "spaces::cron_safe"
end
