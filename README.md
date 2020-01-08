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

## Customization

### Add daemons for supervisor

You can add applications to supervisor to run daemonized.
For this, place a file 'myworker.ini' in /etc/supervisor/conf.d

I.e. in your dockerfile:

```
FROM 24hoursmedia/pfpm73rutor:latest
COPY conf/supervisor/worker.ini /etc/supervisor/conf.d/worker.ini
```

worker.ini:
```
[program:app-worker]
command=/bin/sleep 10
stdout_logfile=/dev/stdout
stdout_logfile_maxbytes=0
stderr_logfile=/dev/stderr
stderr_logfile_maxbytes=0
autostart=true
autorestart=true
startretries=1999999999
```


