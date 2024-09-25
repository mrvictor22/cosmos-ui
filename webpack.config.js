const Encore = require('@symfony/webpack-encore');
const { VueLoaderPlugin } = require('vue-loader');

Encore
    // Directorio donde se guardará la compilación
    .setOutputPath('public/build/')
    
    // Public path usado por el servidor web
    .setPublicPath('/build')
    
    // Definir el punto de entrada principal del proyecto
    .addEntry('app', './assets/app.js')

    // Habilitar Vue.js con la configuración correcta
    .enableVueLoader(() => {}, { runtimeCompilerBuild: true })

    // Limpiar el directorio de salida antes de construir
    .cleanupOutputBeforeBuild()

    // Habilitar source maps (útil para debugging)
    .enableSourceMaps(!Encore.isProduction())

    // Habilitar la generación de un único runtime chunk para optimizar
    .enableSingleRuntimeChunk()

    // Habilitar el soporte de Sass/SCSS
    .enableSassLoader()

    // Habilitar versiones de archivos hash en producción
    .enableVersioning(Encore.isProduction())

    // Habilitar notificaciones en consola
    .enableBuildNotifications()

    // Agregar el plugin de Vue Loader
    .addPlugin(new VueLoaderPlugin());

module.exports = Encore.getWebpackConfig();
