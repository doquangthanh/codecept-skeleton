#!binbash

echo ${TRAVIS_OS_NAME}
which unzip

if [[ $TRAVIS_OS_NAME == 'osx' ]]; then
    wget httpsbitbucket.orgariyaphantomjsdownloadsphantomjs-2.1.1-macosx.zip
    unzip phantomjs-2.1.1-macosx.zip
    ln -s phantomjs-2.1.1-macosx phantomjs
else
    wget httpsbitbucket.orgariyaphantomjsdownloadsphantomjs-2.1.1-linux-x86_64.tar.bz2
    tar -xvjf phantomjs-2.1.1-linux-x86_64.tar.bz2
    ln -s phantomjs-2.1.1-linux-x86_64 phantomjs
	nohup phantomjs --webdriver=4444 &
fi