![League Ops Logo](resources/rsz_leagueops.png)
# Tournament Management Interface
This project is designed for esport tournament admins and other staff that need to manages team comms during an event.

## How to Build and Run

```sh
composer install
php -S localhost:8080
```

## How to Configure
All the configuration that needs to be done before the events is to change the connect link in config.json
```cfg
serverquery://someuser:something@192.168.1.1:10011/?server_port=9987
```
And add all the teams in this array format:
```json
    "matches": [
        {
            "server": 1,
            "teams": [
                {
                    "name": "tricked",
                    "channel": "channelName"
                },
                {
                    "name": "ignite",
                    "channel": "channelName"
                }
            ]
        }
    ]
```
The "server" tag is used if you have more than one teamspeak 3 server capped @ 32 users.