if ! wp --allow-root core is-installed; then
    wp --allow-root core install --url="$WP_URL" --title="$WP_TITLE" --admin_user="$WP_USER" --admin_email="$WP_EMAIL" --admin_password="$WP_PASSWORD"
	wp --allow-root user create test test@example.com
fi
php-fpm7.3 -F
