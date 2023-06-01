# Setup
Run containers
```
docker-compose up -d --build
```

## PHP
Install composer libraries
```    
docker-compose exec php composer install
```

## SonarQube
1. Access SonarQube `http://localhost:9000`
    User: `admin`
    Password: `admin`
2. Update SonarQube password
3. Create a project manually
4. Fill fields
    1. `Project display name`
    2. `Project key`
        1. Copy Project Key
        2. Update file `sonar-project.properties` 
            - Token in line `sonar.projectKey`
    3. `Main branch name`  
        _**Note:**_ default branch is `main`
5. Click Set Up
6. Click Analyze your project locally
7. Define a token name (can be any name)
8. Set Expires in as `No expiration`
9. Click `Generate`
    1. Copy generated token
    2. Update file `sonar-project.properties` 
        - Token in line `sonar.login`
10. Click `Continue`
11. Select `Other (for JS, TS, Go, Python, PHP, ...)`
12. Select `Linux`

# Usage
1. Run PHP tests
    ```    
    docker-compose exec php vendor/bin/phpunit --coverage-clover=tests/coverage/coverage.xml
    ```
2. Run Sonar Scanner
    ```
    docker-compose exec php sonar-scanner
    ```
3. Refresh SonarQube