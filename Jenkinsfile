pipeline {
    agent any

    stages {

        stage('Build') {
            steps {
                sh 'composer install' // Install PHP dependencies
                sh 'php artisan key:generate' // Generate Laravel application key
            }
        }

        stage('Run Tests') {
            steps {
                sh 'php artisan test' // Run Laravel tests
            }
        }

        // stage('Deploy') {
        //     steps {
        //         sh 'rsync -avz --exclude="vendor/" --exclude=".env" . devops@12.7.108.141:/var/www/html/laravel' // Replace with your deployment command (e.g., rsync, scp)
        //     }
        // }
    }
}