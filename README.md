1. Install php dependecies
    ```
    sudo apt install php8.2-pcov
    ```
2. Install composer libs
    ```
    composer install
    ```
3. Run tests
    ```
    vendor/bin/phpunit --coverage-text > tests/coverage/coverage.txt
    ```