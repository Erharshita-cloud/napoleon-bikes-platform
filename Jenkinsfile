pipeline {
    agent any

    environment {
        AWS_REGION = "ap-south-1"
        ECR_REPO = "napoleon-bikes"
        IMAGE_TAG = "latest"
    }

    stages {

        stage('Checkout') {
            steps {
                git 'https://github.com/your-repo/napoleon-bikes-platform.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $ECR_REPO:$IMAGE_TAG .'
            }
        }

        stage('Login ECR') {
            steps {
                sh 'aws ecr get-login-password --region $AWS_REGION | docker login --username AWS --password-stdin <ECR_URL>'
            }
        }

        stage('Push Image') {
            steps {
                sh 'docker tag $ECR_REPO:$IMAGE_TAG <ECR_URL>/$ECR_REPO:$IMAGE_TAG'
                sh 'docker push <ECR_URL>/$ECR_REPO:$IMAGE_TAG'
            }
        }

        stage('Deploy') {
            steps {
                sh 'echo "Trigger ASG Instance Refresh or CodeDeploy here"'
            }
        }
    }
}
