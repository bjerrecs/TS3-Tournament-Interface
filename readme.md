# TS3-Tournament-Interface

## How to Build and Run

```sh
composer install
php -S localhost:8080
```

## How to Configure
To change the panle name and logo change this in the config.json
```json
"pagename":"Leagueops - Match Manager",
"pagetheme":"dark",
"pagelogo":"leagueops.png"
```
The above settings should describe them self

To add a more then one Teamspeak server,
Just add a new one like this:
```json
"servers": [
        {
            "id": 1,
            "connectionString": "serverquery://someuser:something@192.168.1.1:10011/?server_port=9987"
        },
        {
            "id": 2,
            "connectionString": "serverquery://someuser:something@192.168.1.1:10011/?server_port=9987"
        }
    ]
```
