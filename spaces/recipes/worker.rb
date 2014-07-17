node[:deploy].each do |app_name, deploy_config|
  template "/etc/init/#{app_name}-worker.conf" do
    owner "root"
    group "root"
    mode 0644
    variables({
      :app_config => deploy_config
    })
    source "sidekiq.conf.erb"
  end

  service "#{app_name}-worker" do
    provider Chef::Provider::Service::Upstart
    action [ :enable, :restart ]
  end
end
