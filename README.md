# taling-externship-team-mission Part. backend
### 탈잉 익스턴십 팀미션 개요와 목표
- 탈잉 익스턴십 팀미션은 Home, Detail, search 3가지페이지를 구현하는 것입니다. <br />
- 클래스와 유저 대한 DB를 구축하고 관계를 연결해 주는 것을 목표로 했습니다. 
- search 페이지에서 쿼리에 따른 리스트를 보여주는 것을 목표로 했습니다. [일부 구현]
- 찜 기능을 활용하기 위해 찜기능을 활용 [X]
- 
### Developement Environments
- BackEnd Framework: Laravel Framework 8.75 , PHP 8.0
- server : 3팀 박경서님 서버컴퓨터😊
- DataBase: Mysql

### DB
![](https://user-images.githubusercontent.com/38105420/160089758-b7345364-1bde-4b25-9167-576bf8425581.png)

### 셋팅 명령어
1. composer install
2. npm install
3. cp .env.example .env
4. php artisan key:generate
5. php artisan storage:link
6. php artisan migrate:fresh --seed
