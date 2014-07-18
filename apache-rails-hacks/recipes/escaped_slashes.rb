# I'm not even going to think about best practises...but I do know what they are

cookbook_file "/etc/apache2/conf-enabled/allow-encoded-slashes.conf" do
  source 'allow-encoded-slashes.conf'
  action :create
end

