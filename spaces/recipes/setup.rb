# All the shiny prerequisites

%w{imagemagick libmagickcore-dev libxslt-dev libxml2-dev}.each do |d|
  package d do
    action :install
  end
end