### 1) You need Install Docker
### 2) In folder run command :
`$ docker-compose up -d --build`
### 3) Import db

`$ docker exec -i test-site-mysql mysql -u admin -proot test-site < test-site.sql`

### 4) Open in browser  http://localhost:80
### 5) For run gulp, open the folder and execute in the console:

`$ cd development `

`$ npm i `

`$ gulp watch`
