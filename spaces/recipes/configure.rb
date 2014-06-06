# set up the environment-specific settings

node[:deploy].each do |app_name, deploy_config|

  # use erb template
  env_template_path = "#{deploy[:deploy_to]}/shared/config/settings/#{deploy_config[:rails_env]}.yml"
  template env_template_path do
    source "env_settings.yml.erb"

    # set mode, group and owner of generated file
    mode "0644"
    group deploy_config[:group]
    owner deploy_config[:user]

    # define variable “@redis” to be used in the ERB template
    variables(
      :redis => deploy_config[:redis]
    )

    # only generate a file if there is Redis configuration
    not_if do
      deploy_config[:redis].blank?
    end
  end
end