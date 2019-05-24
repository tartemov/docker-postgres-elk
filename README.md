# Dockers for PostgreSQL and Beats (Filebeat, Metricbeat)

Run the PostgreSQL and Beats containers

It will give you the ability to analyze and visualize PostgreSQL logs in Kibana.

Based on the official Docker images:

* [postgresql](https://github.com/docker-library/postgres)
* [filebeat](https://github.com/elastic/beats-docker)
* [metricbeat](https://github.com/elastic/beats-docker)

This configuration uses [docker-elk](https://github.com/tartemov/docker-elk.git)

# How to setup 

1.Clone [docker-elk](https://github.com/tartemov/docker-elk.git) repository

2.Clone this repository

3.Start the Elastic and PostgreSQL with Beats using `docker-compose`:

```console
$ cd docker-elk
$ docker-compose up -d
$ cd ../docker-postgres-elk
$ docker-compose up -d
```

# PostgreSQL Configuration

There are two configuration file:

* postgres.docker.conf - basic configuration with minimum changes from default
* postgres.docker.res.conf - configuration with changes to make filebeat and metricbeat fully work

By default, the stack exposes the following ports:
* 5432: PostgreSQL 
