ga
==

# Now that you're using Bundler, you need to run `bundle exec compass watch` instead of simply `compass watch`.

Install bundler:

$ gem install bundler
Create the Gemfile in your project if you don't already have one:

$ bundle init
Specify the version you want/need in your Gemfile:

gem 'compass', '~>0.12.2'
gem 'sass', '3.2.8'
Install the specific gems and dependencies you have defined in your Gemfile:

$ bundle install
When executing a gem, you can now use bundler to control which version to execute based on your Gemfile:

$ bundle exec compass watch
That's it!
