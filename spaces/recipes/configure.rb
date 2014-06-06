# set up the environment-specific settings

node[:deploy].each do |app_name, deploy_config|

  # determine root folder of new app deployment
  app_root = "#{deploy_config[:deploy_to]}/current"

  # use erb template
  template "#{app_root}/config/settings/#{deploy_config[:rails_env]}.yml" do
    source "env_settings.yml.erb"
    cookbook "spaces"

    # set mode, group and owner of generated file
    mode "0660"
    group deploy_config[:group]
    owner deploy_config[:user]

    # define variable “@redis” to be used in the ERB template
    variables(
      :redis => deploy_config[:redis] || {}
    )

    # only generate a file if there is Redis configuration
    not_if do
      deploy_config[:redis].blank?
    end
  end
end