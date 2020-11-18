# Repository for the subject Web Programming II ,Tupar Exactas Unicen


[![Codacy Badge](https://api.codacy.com/project/badge/Grade/2c7ac6554ef7488f957aa0d2096338ea)](https://app.codacy.com/gh/RosarioTG/AnimalsApp?utm_source=github.com&utm_medium=referral&utm_content=RosarioTG/AnimalsApp&utm_campaign=Badge_Grade)
[![codecov](https://codecov.io/gh/RosarioTG/AnimalsApp/branch/master/graph/badge.svg)](https://codecov.io/gh/RosarioTG/AnimalsApp)
![Static Code Analysis](https://github.com/RosarioTG/AnimalsApp/workflows/Static%20Code%20Analysis/badge.svg)
![Laravel](https://github.com/RosarioTG/AnimalsApp/workflows/Laravel/badge.svg)
![Dusk Tests](https://github.com/RosarioTG/AnimalsApp/workflows/Dusk%20Tests/badge.svg)
![Deploy](https://github.com/RosarioTG/AnimalsApp/workflows/Deploy/badge.svg)

# Steps to follow to download the project

- Install Docker
- Clone the repository
- Configure the connection to the database in the .env file 
    - DB_CONNECTION=pgsql 
    - DB_HOST=database 
    - DB_PORT=5432
    - DB_DATABASE=mydb 
    - DB_USERNAME=mydb 
    - DB_PASSWORD=thisisasecretpassword
- Execute the command (sudo docker run --rm -v $ (pwd): / app composer install) to download missing files for the correct operation of the application
- Generate the key for the .env file with the following command (php artisan key: generate)
-Run docker-compose up -d, open the browser and go to localhost: 8080 

# Link to the deployed site on heroku 

https://animals-app-rosario.herokuapp.com/
