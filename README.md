<h1 align="center">Hi 👋, I'm BugHunter</h1>
<h3 align="center">Robot Telegram for show receive message as JSON</h3>


<p align="left"> <a href="https://twitter.com/" target="blank"><img src="https://img.shields.io/twitter/follow/?logo=twitter&style=for-the-badge" alt="" /></a> </p>

this code writed with **PHP**

## how to use
1. upload this code on host with support `PHP,SSL`
2. enter token robot (get from telegram botfather) in :
  ```php
  $token = '';
```

3. set webhook robot url with address sourcecode 

## result:
result like this :
  ```bash
  {
    "update_id": 307839236,
    "message": {
        "message_id": 64,
        "from": {
            "id": 100912345,
            "is_bot": false,
            "first_name": "mrbug"
            "username": "mrbugbounty",
            "language_code": "en"
        },
        "chat": {
            "id": 100912345,
            "first_name": "mrbug",
            "username": "mrbugbounty",
            "type": "private"
        },
        "date": 1641912157,
        "text": "Hello Friend"
    }
}
  ```


