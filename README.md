<h1>Repository for the subject Web Programming II ,Tupar Exactas Unicen</h1>
[![Codacy
Badge](https://api.codacy.com/project/badge/Grade/2c7ac6554ef7488f957aa0d2096338ea)](https://app.codacy.com/gh/RosarioTG/AnimalsApp?utm_source=github.com&utm_medium=referral&utm_content=RosarioTG/AnimalsApp&utm_campaign=Badge_Grade)
[![codecov](https://codecov.io/gh/RosarioTG/AnimalsApp/branch/master/graph/badge.svg)](https://codecov.io/gh/RosarioTG/AnimalsApp) ![Static Code Analysis](https://github.com/RosarioTG/AnimalsApp/workflows/Static%20Code%20Analysis/badge.svg)
![Laravel](https://github.com/RosarioTG/AnimalsApp/workflows/Laravel/badge.svg) ![Dusk Tests](https://github.com/RosarioTG/AnimalsApp/workflows/Dusk%20Tests/badge.svg)
![Deploy](https://github.com/RosarioTG/AnimalsApp/workflows/Deploy/badge.svg)

<h2>Steps to follow to download the project</h2>
<ol>
    <li>- Install Docker</li>
    <li>- Clone the repository</li>
    <li>- Configure the connection to the database in the .env file</li>

  <ul>
        <li>- DB_CONNECTION=pgsql</li>
        <li>- DB_HOST=database</li>
        <li>- DB_PORT=5432</li>
        <li>- DB_DATABASE=mydb</li>
        <li>- DB_USERNAME=mydb</li>
        <li>- DB_PASSWORD=thisisasecretpassword</li>
 </ul>
    <li>- Execute the command (sudo docker run --rm -v $ (pwd): / app composer install) to download missing files for the correct operation of the application</li>

   <li>- Generate the key for the .env file with the following command (php artisan key: generate)</li>

   <li>-Run docker-compose up -d, open the browser and go to localhost: 8080</li>
</ol>
<h2>Link to the deployed site on heroku</h2>

https://animals-app-rosario.herokuapp.com/