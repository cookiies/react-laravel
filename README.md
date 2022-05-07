# react-laravel

Following a blog on pusher for creating a demo laravel application using the popular front-end React library.

---
### Setting up xampp environment

    - download xampp installer¹
    - download Oh My Zsh (for mac)
        include following in `nano ~/.zshrc`
            export XAMPP_HOME=/Applications/XAMPP
            export PATH=${XAMPP_HOME}/bin:${PATH}
            export PATH
            export PATH="$HOME/.composer/vendor/bin:$PATH"
    - download composer and move to global scope
        curl -s http://getcomposer.org/installer | php
        sudo mv composer.phar /usr/local/bin/
    - download node with package manager (npm)²

¹[Sourcforge xampp download](https://sourceforge.net/projects/xampp/)

²[Node.js download](https://nodejs.org/en/download/)

### React and Laravel install instructions

    composer create-project laravel/laravel <project-name>
    cd <project-name>
    composer require laravel/ui
    php artisan ui react
    node -v                                                     // install node with node package manager
    npm -v
    npm install
    php artisan preset react
    npm run watch
    php artisan serve