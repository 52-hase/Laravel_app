# 使用するPHPのバージョンを指定。8.2-fpmはPHPのFastCGI Process Manager版を使用。
FROM php:8.2-fpm

# カスタムのphp.iniをコンテナ内にコピー
COPY php.ini /usr/local/etc/php/

# パッケージリストを更新し、必要なライブラリをインストール
RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
  && docker-php-ext-install zip pdo_mysql

# Composerをインストールするコマンド
# Composerのインストーラーをダウンロード
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

# ダウンロードしたインストーラーを実行
RUN php composer-setup.php

# インストーラーを削除してきれいにする
RUN php -r "unlink('composer-setup.php');"

# composer.pharをシステム全体で使用できるように /usr/local/bin/composer に移動
RUN mv composer.phar /usr/local/bin/composer

# Composerの動作に関する環境変数を設定
ENV COMPOSER_ALLOW_SUPERUSER 1

# Composerのホームディレクトリを設定
ENV COMPOSER_HOME /composer

# コンテナ内でComposerの実行パスを追加
ENV PATH $PATH:/composer/vendor/bin

# 作業ディレクトリを指定 (コンテナ内での作業場所)
WORKDIR /var/www

# Laravelインストーラーをグローバルにインストール
RUN composer global require "laravel/installer"