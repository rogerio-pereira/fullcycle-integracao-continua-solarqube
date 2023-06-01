1. Run SonarQube Docker Container
    ```
    docker run \
        --rm \
        -e SONAR_HOST_URL="http://${SONARQUBE_URL}" \
        -e SONAR_SCANNER_OPTS="-Dsonar.projectKey=${YOUR_PROJECT_KEY}" \
        -e SONAR_TOKEN="myAuthenticationToken" \
        -v "${YOUR_REPO}:/usr/src" \
        sonarsource/sonar-scanner-cli
    ```
2. Access SonarQube
    ```    
    http://localhost:9000
    ```
3. Generate new Token
    1. Admistration > Security > Users
    2. Click icon in Tokens Column
    3. Type a name
    4. Set Expires to `No Expiration`
    5. Click Generate
    6. Copy Token
    7. Update file `sonar-project.properties` line `sonar.login`
4. Install php dependecies
    ```
    sudo apt install php8.2-pcov
    ```
5. Install composer libs
    ```
    composer install
    ``` 
6. Run tests
    ```
    vendor/bin/phpunit --coverage-clover=tests/coverage/coverage.xml
    ```
7. Install sonar-scanner
    ```
    cd /tmp
    wget -q https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-4.8.0.2856-linux.zip
    unzip sonar-scanner-cli-4.8.0.2856-linux.zip
    sudo mv sonar-scanner-4.8.0.2856-linux /var/opt
    ln -s /var/opt/sonar-scanner-4.8.0.2856-linux/bin/sonar-scanner /usr/local/bin/
    ```
8. Run Sonar Scanner
    ```
    sonar-scanner
    ```