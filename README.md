# Laravel Authentication - Login,Register
사이드 프로젝트를 진행하기 위해서는 '로그인'시스템을 구현해야 한다는 걸 깨달았다.
'로그인'시스템이라.. 서버/DB/Request & Response/Session & Cookie/auth등 다양한 백엔드 내용을 고루 이해하고 있어야 구현이 가능하지 않을까라는 생각이 들었다.
나같은 초보 개발자 맨땅에 헤딩하며 코딩을 하게 되면 너무 많은 시간이 걸리고 도중에 포기해버리게 될 거 같았다.

그래서 다양한 백엔드 프레임워크 종류를 알아보던 중 모던 PHP로 구성된 `Laravel`로 죽이되든 밥이되든 '로그인' 시스템을 구현해보기로 했다.
속도적인 면에서 아쉬움이 있다고는 하지만 가장 빠르고 쉽게 구현할 수 있고 커스터마이징 기능도 제공해주는 라라벨 프레임워크의 '인증'부분을 매뉴얼대로 따라 만들어보자.

//구글링을 하면 Laravel 세팅 및 DB 세팅 과 관련되어 너무 좋은 컨텐츠들이 많으니 참고하자.

## 인증 세팅하기
    참고사항 : 라라벨 최신 버전인 7.0 / Mac OS / php,composer,DB,laravel,npm,node 세팅 완료 후 시점

### 1. migrate 실행
```bash
$composer require create-project laravel/laravel <프로젝트명>
```    
위의 명령어로 라라벨 프로젝트를 설치했다면 기본적으로 `app\User.php`가 생성되어있고 `database\migrations`디렉토리에 `migrate`명령어만 친다면 자동적으로 
연결된 DB에 User인증과 관련된 Column과 Row의 구조가 생성된다.
```bash
$php artisan migrate
```
### 2. laravel/ui 패키지 생성
관련 자료를 찾다보니 6.x 버전 이전부터는 다른 패키지 설치 없 `$php artisan make:auth` 명령어로 인증 세팅을 했었던 거 같다. 하지만 현재 7.x 버전에서는 같은 명령어를 
치게 되면 `Command "make:auth" is not defiend`
찾을 수 없는 명령어라고 에러가 발생한다.

정확하게 6.x버전 시작된건지는 알 수 없지만 7.0버전에서는 라라벨의 `laravel/ui` 패키지를 설치해야 기본으로 제공되는 `auth`를 사용할 수 있는 거 같다.


```bash
$composer require laravel/ui //7.0버전이라면 문제 없이 install된다.
```

설치 후 composer.json에서 살펴보면 `laravel/ui: 2.0` 버전으로 install 되어 있는데 만약에 라라벨 6.x 버전을 사용하고 있다면 
`laravel/ui:1.x`버전으로 install 해줘야 한다.
```bash
$composer require laravel/ui "^1.3" 
```

### 3. auth 설치하기
```bash
$php aritsan ui react --auth
```
라라벨 코리아 예제에서는 'react'대신 'vue'로 설치, (저 같은 경우 그나마 잠깐 만져본게 리액트여서 이걸로 설치)
아마 FrontEnd단을 어떤 라이브러리로 사용할것인지 선택할 수 있게 제공되는거 같다. (나중에 기회가 된다면 프론트엔드 단은 'react'를 깊게 파보고 싶다.)

여기까지만 문제없이 진행되었다면 최소한의 login과 register와 관련된 인증 시스템 구현이 완료된 것이다. 

View단에는 auth와 관련된 login,register,verify 블레이드 파일 / layout 블레이드 파일 / 로그인 되었을 경우 home 블레이드 파일
Controller단에서는 HomeController
Route단에서는 home과 관련된 라우팅 설정이 자동으로 세팅되는 거 같다.

## Commit Comment
1. 2020년 3월 11일 - 기본 라라벨의 인증 세팅하는 방법과 git에 코드 업로드

### 참조문서
 - 라라벨 코리아기(6.x) - 인증 | [바로가기](https://laravel.kr/docs/6.x/authentication)
```html
<div></div>
```
