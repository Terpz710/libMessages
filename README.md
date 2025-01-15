# Description
**Messages** allows developers to manage customizable messages with support for tag replacements.

# Features
- Retrieve messages from any `.yml` file
- Replace tags with values in messages
- Colorize messages (e.g. replaces '§' with '&')

# API
**Import this class**
```
use terpz710\messages\Messages;
```

**How to retrieve a key**
```
/* Inside your example_config.yml **/
example_key: "&l&bMessages automatically replaces '§' with '&' ;)"

/* Config is an instance of Config::class **/
$config = new Config($this->getDataFolder() . "your_config.yml");

$msg = new Messages($config, "example_key");

/* Make sure to include (string) **/
$player->sendMessage((string) $msg);
```

**How to replace tags (e.g. str_replace)**
```
/* Inside your example_config.yml **/
example_key: "Welcome {name}, total players online: {player_count}!"

/* Config is an instance of Config::class **/
$config = new Config($this->getDataFolder() . "your_config.yml");

$playerCount = count(Server::getInstance()->getOnlinePlayers());

$msg = new Messages($config, "example_key", ["{name}", "{player_count}"], [$player->getName(), $playerCount]);

/* Make sure to include (string) **/
$player->sendMessage((string) $msg);
```

**Should be pretty simple :)**
