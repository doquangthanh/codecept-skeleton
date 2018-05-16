# Codecept skeleton

### Step by step
#### Step 1: Update composer (Run with first work)
```
cd {projectFolder}/unitTest
composer update
```

#### Step 2: run unitTest
###### Run All test
```
bin/codecept run --steps
```
###### Run single test
```
bin/codecept run {suite-name} {file-name}.php:{function-name}
```
```
bin/codecept run acceptance

bin/codecept run unit
```
## Install codecept
```
bin/codecept bootstrap
```

## Build codecept ENV
```
bin/codecept build
```
===========================================================
## Create new testCase
```

bin/codecept generate:cest acceptance MyPageCest
bin/codecept generate:cest functional MyPageCest

bin/codecept generate:cept acceptance MyPage
bin/codecept generate:cept functional MyPage

bin/codecept generate:test unit Example
bin/codecept generate:test unit SCProduct
```

===========================================================
## Install some software on environment

#### Install php-dom
```
sudo yum -y install --enablerepo=remi php-dom
```

#### Install composer:
```
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/bin/composer
```

#### Check composer version:
```
composer --version
```

#### Install Codeception:
```
wget http://codeception.com/php5/codecept.phar
chmod +x codecept.phar
sudo cp codecept.phar /usr/bin/codecept 
``` 

#### install AspectMock
```
composer require codeception/aspect-mock:* --dev
```

#### install Selenium 
```
cd ~
sudo yum install java-1.8.0-openjdk-devel
wget http://selenium-release.storage.googleapis.com/2.53/selenium-server-standalone-2.53.0.jar
(http://selenium-release.storage.googleapis.com/index.html)
nohup java -jar  -Dwebdriver.chrome.driver=chromedriver selenium-server-standalone-2.53.0.jar &
```


#### OR install phantomjs 
```
sudo yum update
sudo yum install build-essential chrpath libssl-dev libxft-dev
sudo yum install libfreetype6 libfreetype6-dev
sudo yum install libfontconfig1 libfontconfig1-dev
```
```
cd ~
export PHANTOM_JS="phantomjs-1.9.8-linux-x86_64"
wget https://bitbucket.org/ariya/phantomjs/downloads/$PHANTOM_JS.tar.bz2
sudo tar xvjf $PHANTOM_JS.tar.bz2
```

#### Config phantomjs
```
sudo mv $PHANTOM_JS /usr/local/share
sudo ln -sf /usr/local/share/$PHANTOM_JS/bin/phantomjs /usr/local/bin
phantomjs --webdriver=4444

```

#### Install plugin
```
sudo yum install php-curl
sudo yum install php-mbstring
sudo yum install php-dom
```
#### Setting timezone php.ini
```
date.timezone = Asia/Tokyo
```

### Install Chrome Driver
```
sudo yum install unzip
wget -N http://chromedriver.storage.googleapis.com/2.10/chromedriver_linux64.zip -P ~/Downloads
unzip ~/Downloads/chromedriver_linux64.zip -d ~/Downloads
chmod +x ~/Downloads/chromedriver
sudo mv -f ~/Downloads/chromedriver /usr/local/share/chromedriver
Change the directory to /usr/bin/chromedriver
sudo ln -s /usr/local/share/chromedriver /usr/local/bin/chromedriver
sudo ln -s /usr/local/share/chromedriver /usr/bin/chromedriver
```
```
Download the latest epel-release rpm from
http://dl.fedoraproject.org/pub/epel/7/x86_64/
Install epel-release rpm:
# rpm -Uvh epel-release*rpm
Install chromedriver rpm package:
# yum install chromedriver
```
#### Fixbugs libgconf-2.so.4
```
yum provides */libgconf-2.so.4
sudo yum install GConf2
```
// install font and libstdc
yum install fontconfig freetype freetype-devel fontconfig-devel libstdc++

//for japan font
yum groupinstall "Japanese Support"
yum groupinstall "fonts"
