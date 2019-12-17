# Docker PHPFPM73 Rutor edition

This dockerfile runs php73-fpm daemonized by supervisor.

Image name: **24hoursmedia/pfpm73rutor**

## Features

* php73-fpm daemonized by supervisord
* easily daemonize your php application with the already available supervisord
* composer preinstalled
* contains hirak/prestissimo for speeding up composer installs
* based on alpine

## Test it

```
docker-compose
```

```
./build.sh
./run.sh
```

