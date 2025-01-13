FROM php:7.4-apache

# Copy the source code into the container
COPY src/ /var/www/html/

# Expose port 80
EXPOSE 80

# Set the working directory
WORKDIR /var/www/html/

# Start the Apache server
CMD ["apache2-foreground"]