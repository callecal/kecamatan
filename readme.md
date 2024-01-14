<!-- [![Build Status](https://img.shields.io/travis/bayubimantarar/suratapp.svg?style=flat-square)](https://travis-ci.org/bayubimantarar/suratapp) -->

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](https://github.com/bayubimantarar/pelayanan-desa/pulls)
[![GitHub](https://img.shields.io/github/license/bayubimantarar/pelayanan-desa.svg?style=flat-square)](https://github.com/bayubimantarar/pelayanan-desa/blob/master/LICENSE)

# Project Magang Sumur Bandung

terdiri dari company profile dan pelayanan kecamatan sumur bandung
disusun sama ecal dan dapin

## cara install

1.  Clone repository
2.  Install dependencies composer

        composer install --no-dev #for production

        composer install #for development

3.  Copy file environment

        cp .env.example .env

4.  Generate application key

        php artisan key:generate
