# Utilise une image officielle PHP avec serveur intégré
FROM php:8.2-cli

# Installe les extensions nécessaires si besoin (ex: mysqli)
# RUN docker-php-ext-install mysqli

# Copie tous les fichiers du projet dans le conteneur
COPY . /app

# Déplace-toi dans le dossier du projet
WORKDIR /app

# Expose le port utilisé par Render (par défaut : 10000)
EXPOSE 10000

# Commande pour lancer le serveur PHP
CMD ["php", "-S", "0.0.0.0:10000"]
