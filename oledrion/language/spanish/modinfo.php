<?php
/**
 * ****************************************************************************
 * oledrion - MODULE FOR XOOPS
 * Copyright (c) Hervé Thouzard (http://www.herve-thouzard.com/)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Hervé Thouzard (http://www.herve-thouzard.com/)
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         oledrion
 * @author 			Hervé Thouzard (http://www.herve-thouzard.com/)
 *
 * Version : $Id:
 * ****************************************************************************
 */
// The name of this module
define('_MI_OLEDRION_NAME',"Catálogo");
// A brief description of this module
define('_MI_OLEDRION_DESC',"Crea una tienda online para mostrar y vender productos.");
// Names of blocks for this module (Not all module has blocks)
define('_MI_OLEDRION_BNAME1',"Productos recientes");
define('_MI_OLEDRION_BNAME2',"Productos Principales");
define('_MI_OLEDRION_BNAME3',"Categorías");
define('_MI_OLEDRION_BNAME4',"Best Sellers");
define('_MI_OLEDRION_BNAME5',"Productos con la mejor puntuación");
define('_MI_OLEDRION_BNAME6',"Producto al azar");
define('_MI_OLEDRION_BNAME7',"Productos en promoción");
define('_MI_OLEDRION_BNAME8',"Carro de compras");
define('_MI_OLEDRION_BNAME9',"Productos recomendados");
define('_MI_OLEDRION_BNAME10',"Vendido Recientemente");
define('_MI_OLEDRION_BNAME11',"Últimas Listas ");
define('_MI_OLEDRION_BNAME12',"Mis listas");
define('_MI_OLEDRION_BNAME13',"Listas de la categoría actual");
define('_MI_OLEDRION_BNAME14',"Listas aleatorias");
define('_MI_OLEDRION_BNAME15',"Listas Más vistas");
define('_MI_OLEDRION_BNAME16',"Búsqueda con Ajax");

define('_MI_OLEDRION_BNAME1_DESC', 'Mostrar títulos de productos añadidos recientemente');
define('_MI_OLEDRION_BNAME2_DESC', 'Mostrar títulos de productos más vistos');
define('_MI_OLEDRION_BNAME3_DESC', 'Mostrar categorías en relación con la página de la categoría');
define('_MI_OLEDRION_BNAME4_DESC', 'Mostrar productos más vendidos');
define('_MI_OLEDRION_BNAME5_DESC', 'Mostrar de productos de mayor rating');
define('_MI_OLEDRION_BNAME6_DESC', 'Mostrar un producto al azar');
define('_MI_OLEDRION_BNAME7_DESC', 'Mostrar productos en promoción');
define('_MI_OLEDRION_BNAME8_DESC', 'Mostrar Carro');
define('_MI_OLEDRION_BNAME9_DESC', 'Mostrar últimos productos recomendados');
define('_MI_OLEDRION_BNAME10_DESC', 'Mostrar productos vendidos recientemente');
define('_MI_OLEDRION_BNAME11_DESC', 'Mostrar listas públicas recientes');
define('_MI_OLEDRION_BNAME12_DESC', 'Mostrar listas de usuarios');
define('_MI_OLEDRION_BNAME13_DESC', 'Mostrar recientes listas públicas de acuerdo con la categoría actual');
define('_MI_OLEDRION_BNAME14_DESC', 'Mostrar listas aleatorias');
define('_MI_OLEDRION_BNAME15_DESC', 'Mostrar listas de más visitados');
define('_MI_OLEDRION_BNAME16_DESC', 'Mostrar formulario de búsqueda ajax');
// Sub menu titles
define('_MI_OLEDRION_SMNAME1',"Carro de compras");
define('_MI_OLEDRION_SMNAME2',"Inicio");
define('_MI_OLEDRION_SMNAME3',"Categorías");
define('_MI_OLEDRION_SMNAME4',"Mapa de categorías");
define('_MI_OLEDRION_SMNAME5',"Quién es quién");
define('_MI_OLEDRION_SMNAME6',"Todos los productos");
define('_MI_OLEDRION_SMNAME7',"Búsqueda");
define('_MI_OLEDRION_SMNAME8',"Condiciones generales de venta");
define('_MI_OLEDRION_SMNAME9',"Productos recomendados");
define('_MI_OLEDRION_SMNAME10',"Mis listas");
define('_MI_OLEDRION_SMNAME11',"Todas las listas");
// Names of admin menu items
define('_MI_OLEDRION_ADMENU0',"Proveedores");
define('_MI_OLEDRION_ADMENU1',"Impuesto s/ventas");
define('_MI_OLEDRION_ADMENU2',"Categorías");
define('_MI_OLEDRION_ADMENU3',"Fabricantes");
define('_MI_OLEDRION_ADMENU4',"Productos");
define('_MI_OLEDRION_ADMENU5',"Pedidos");
define('_MI_OLEDRION_ADMENU6',"Descuentos");
define('_MI_OLEDRION_ADMENU7',"Boletín de noticias");
define('_MI_OLEDRION_ADMENU8',"Textos");
define('_MI_OLEDRION_ADMENU9',"Existencias bajas");
define('_MI_OLEDRION_ADMENU10',"Panel de Control");
define('_MI_OLEDRION_ADMENU11',"Archivos adjuntos");
define('_MI_OLEDRION_ADMENU12',"Pasarelas de Pago");
define('_MI_OLEDRION_ADMENU13',"Opciones de Producto");
define('_MI_OLEDRION_ADMENU14',"Bloques");
define('_MI_OLEDRION_ADMENU15',"Listas");
define('_MI_OLEDRION_ADMENU16',"Mantenimiento");
define('_MI_OLEDRION_ADMENU17',"Propiedades del Producto");
define('_MI_OLEDRION_ADMENU18', 'Embalaje');
define('_MI_OLEDRION_ADMENU19', 'Localización');
define('_MI_OLEDRION_ADMENU20', 'Entrega');
define('_MI_OLEDRION_ADMENU21', 'Pago');

// Settings
define('_MI_OLEDRION_SETTING_1', 'lempira(s)');
define('_MI_OLEDRION_SETTING_2', 'L. ');
define('_MI_OLEDRION_SETTING_3', '2');
define('_MI_OLEDRION_SETTING_4', '1');
define('_MI_OLEDRION_SETTING_5', '[space]');
define('_MI_OLEDRION_SETTING_6', ',');
// Title of config items
define('_MI_OLEDRION_NEWLINKS',"Seleccione el número máximo de productos nuevos que se muestran en la página superior");
define('_MI_OLEDRION_PERPAGE',"Seleccione el número máximo de productos que se muestran en cada página");
define('_MI_OLEDRION_RELATEDLIMIT', 'Seleccione el número máximo de productos que se muestran en la página del producto');

// Text for notifications
define('_MI_OLEDRION_GLOBAL_NOTIFY',"Global");
define('_MI_OLEDRION_GLOBAL_NOTIFYDSC',"Opciones de notificación de las listas globales.");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFY',"Nueva categoría");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYCAP',"Avisarme cuando se crea una nueva categoría de producto.");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYDSC',"Recibir una notificación cuando se crea una nueva categoría de producto.");
define('_MI_OLEDRION_GLOBAL_NEWCATEGORY_NOTIFYSBJ',"[{X_SITENAME}] {X_MODULE} notificación auto: Nueva Categoría de Productos");
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFY',"Nuevo producto");
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYCAP',"Avisarme cuando se agregue un nuevo producto.");
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYDSC',"Recibir una notificación cuando se agregue un nuevo producto.");
define('_MI_OLEDRION_GLOBAL_NEWLINK_NOTIFYSBJ',"[{X_SITENAME}] {X_MODULE} notificación auto: Nuevo Producto");
define('_MI_OLEDRION_FORM_OPTIONS',"Formulario de Opción");
define('_MI_OLEDRION_FORM_OPTIONS_DESC',"Seleccione el editor a usar. Si tiene una instalación 'simple' (por ejemplo, si usa únicamente el editor del core de xoops, proporcionado en el paquete estándar del núcleo de XOOPS) entonces, puede seleccionar sólo DHTML y compacto");
define('_MI_OLEDRION_FORM_COMPACT',"Compacto");
define('_MI_OLEDRION_FORM_DHTML',"DHTML");
define('_MI_OLEDRION_FORM_SPAW',"SPAW Editor");
define('_MI_OLEDRION_FORM_HTMLAREA',"Editor de HtmlArea");
define('_MI_OLEDRION_FORM_FCK',"FCK Editor");
define('_MI_OLEDRION_FORM_KOIVI',"Editor de Koivi");
define('_MI_OLEDRION_FORM_TINYEDITOR',"TinyEditor");
define('_MI_OLEDRION_INFOTIPS',"Longitud de la información de las herramientas");
define('_MI_OLEDRION_INFOTIPS_DES',"Si utiliza esta opción, los enlaces relacionados con los productos contendrán los primeros caracteres (n) del producto. Si establece este valor a 0 entonces el infotips estará vacío");
define('_MI_OLEDRION_UPLOADFILESIZE',"Tamaño Máximo de archivo a subir (KB) 1048576 = 1 Meg");
define('_MI_PRODUCTSBYTHISMANUFACTURER',"Productos del mismo fabricante");
define('_MI_OLEDRION_PREVNEX_LINK',"¿Mostrar el enlace anterior y siguiente?");
define('_MI_OLEDRION_PREVNEX_LINK_DESC',"Cuando esta opción está establecida en 'Sí', dos nuevos enlaces son visibles en la parte inferior de cada producto. Esos vínculos se usan para ir al producto anterior y siguiente según la fecha de publicación");
define('_MI_OLEDRION_SUMMARY1_SHOW',"¿Mostrar productos recientes en todas las categorías?");
define('_MI_OLEDRION_SUMMARY1_SHOW_DESC',"Cuando se utiliza esta opción, es visible en la parte inferior de cada producto, un resumen que contiene enlaces a todos los productos publicados recientemente");
define('_MI_OLEDRION_SUMMARY2_SHOW',"¿Mostrar productos recientes en la categoría actual?");
define('_MI_OLEDRION_SUMMARY2_SHOW_DESC',"Cuando se utiliza esta opción, es visible en la parte inferior de cada producto, un resumen que contiene enlaces a todos los productos publicados recientemente");
define('_MI_OLEDRION_OPT23',"[METAGEN] - número máximo de palabras clave a generar");
define('_MI_OLEDRION_OPT23_DSC',"Seleccione el número máximo de palabras clave a generar automáticamente.");
define('_MI_OLEDRION_OPT24',"[METAGEN] - Orden de palabras clave");
define('_MI_OLEDRION_OPT241',"Crearlas en el orden en que aparecen en el texto");
define('_MI_OLEDRION_OPT242',"Orden de palabras frecuentes");
define('_MI_OLEDRION_OPT243',"Invirtiendo el orden de palabras frecuentes");
define('_MI_OLEDRION_OPT25',"[METAGEN] - Lista negra");
define('_MI_OLEDRION_OPT25_DSC',"Introduzca palabras (separadas por comas) para quitar de las palabras clave meta");
define('_MI_OLEDRION_RATE',"¿Permitir que los usuarios calificar los productos?");
define('_MI_OLEDRION_ADVERTISEMENT',"Anuncio");
define('_MI_OLEDRION_ADV_DESCR',"Escriba un texto o un código de javascript para mostrar en sus productos");
define('_MI_OLEDRION_MIMETYPES',"Introduzca tipos Mime autorizados para subir (separados en una nueva línea)");
define('_MI_OLEDRION_STOCK_EMAIL',"Correo electrónico para utilizar cuando las existencias estén bajas");
define('_MI_OLEDRION_STOCK_EMAIL_DSC',"No escriba nada, si no desea utilizar esta función.");
define('_MI_OLEDRION_OPT7',"¿Usar los feeds RSS?");
define('_MI_OLEDRION_OPT7_DSC',"Los últimos productos estarán disponibles a través de una fuente RSS");
define('_MI_OLEDRION_CHUNK1',"Útil para productos más recientes");
define('_MI_OLEDRION_CHUNK2',"Útil para productos más comprados");
define('_MI_OLEDRION_CHUNK3',"Útil para productos más vistos");
define('_MI_OLEDRION_CHUNK4',"Útil para productos con mejor ranking ");
define('_MI_OLEDRION_ITEMSCNT',"Recuento de elementos para mostrar en la administración");
define('_MI_OLEDRION_PDF_CATALOG',"¿Permitir el uso del catálogo PDF?");
define('_MI_OLEDRION_URL_REWR',"¿Utilizar la reescritura de URL?");
define('_MI_OLEDRION_MONEY_F',"Nombre de la moneda");
define('_MI_OLEDRION_MONEY_S',"Símbolo de moneda");
define('_MI_OLEDRION_NO_MORE',"¿Mostrar productos incluso cuando no hay ningún stock disponible?");
define('_MI_OLEDRION_MSG_NOMORE',"Texto que se muestra cuando no hay más existencias de un producto");
define('_MI_OLEDRION_GRP_SOLD',"¿Grupo para enviar un correo electrónico cuando se vende un producto?");
define('_MI_OLEDRION_GRP_QTY',"Grupo de usuarios autorizados para modificar las cantidades de productos desde la página de producto");
define('_MI_OLEDRION_BEST_TOGETHER',"¿Mostrar 'Mejor juntos'?");
define('_MI_OLEDRION_UNPUBLISHED',"¿Mostrar Productos cuya fecha de publicación es posterior a la actual?");
define('_MI_OLEDRION_DECIMAL',"Punto decimal para dinero");
define('_MI_OLEDRION_CONF04',"Separador de Miles");
define('_MI_OLEDRION_CONF05',"Separador de decimales");
define('_MI_OLEDRION_CONF00',"¿Posición del dinero?");
define('_MI_OLEDRION_CONF00_DSC',"Sí = derecha, No = izquierda");
define('_MI_OLEDRION_MANUAL_META',"¿Introducir manualmente los metadatos?");
define('_MI_OLEDRION_OFFLINE_PAYMENT',"¿Desea habilitar el pago Offline?");
define('_MI_OLEDRION_OFF_PAY_DSC',"Si se habilita, debe escribir algunos textos en la administración del módulo en la ficha 'Etiqueta'");
define('_MI_OLEDRION_USE_PRICE',"¿Desea utilizar el campo de precio?");
define('_MI_OLEDRION_USE_PRICE_DSC',"Con esta opción se puede deshabilitar el precio de los productos (para crear un catálogo, por ejemplo)");
define('_MI_OLEDRION_PERSISTENT_CART',"¿Desea utilizar el carrito persistente?");
define('_MI_OLEDRION_PERSISTENT_CART_DSC',"Cuando esta opción está establecida en sí, se guarda el carro del usuario (ADVERTENCIA: esta opción consume recursos)");
define('_MI_OLEDRION_RESTRICT_ORDERS',"¿Restringir los pedidos a los usuarios registrados?");
define('_MI_OLEDRION_RESTRICT_ORDERS_DSC',"Si establece esta opción en sí, entonces, sólo los usuarios registrados pueden ordenar productos");
define('_MI_OLEDRION_RESIZE_MAIN',"¿Desea cambiar automáticamente el tamaño de la imagen principal de la imagen de cada producto?");
define('_MI_OLEDRION_RESIZE_MAIN_DSC',"");
define('_MI_OLEDRION_CREATE_THUMBS',"¿Desea que el módulo crea automáticamente la miniatura del producto?");
define('_MI_OLEDRION_CREATE_THUMBS_DSC',"Si no utiliza esta opción, tendrá que subir las miniaturas de productos usted mismo");
define('_MI_OLEDRION_IMAGES_WIDTH',"Ancho de imágenes");
define('_MI_OLEDRION_IMAGES_HEIGHT',"Altura de imágenes");
define('_MI_OLEDRION_THUMBS_WIDTH',"Ancho de la miniatura");
define('_MI_OLEDRION_THUMBS_HEIGHT',"Altura en miniatura");
define('_MI_OLEDRION_RESIZE_CATEGORIES',"¿También desea redimensionar imágenes de categorías e imágenes de fabricantes a las dimensiones anteriores?");
define('_MI_OLEDRION_SHIPPING_QUANTITY',"¿Multiplicar la cantidad de envío del producto por la cantidad de productos?");
define('_MI_OLEDRION_USE_TAGS',"¿Desea utilizar el sistema de etiquetas? (debe estar instalado el módulo de etiqueta de XOOPS)");
define('_MI_OLEDRION_TAG_CLOUD',"Nube de Etiquetas de Módulo");
define('_MI_OLEDRION_TOP_TAGS',"Top Etiquetas del Módulo");
define('_MI_OLEDRION_ASK_VAT_NUMBER',"¿Desea pedir a sus clientes su número de impuestos?");
define('_MI_OLEDRION_USE_STOCK_ATTRIBUTES',"¿Desea gestionar las existencias en los atributos de productos?");
define('_MI_OLEDRION_COLUMNS_INDEX',"Recuento de columnas en la página de inicio del módulo");
define('_MI_OLEDRION_COLUMNS_CATEGORY',"Recuento de columnas en la página de categoría");
define('_MI_OLEDRION_ADAPTED_LIST',"Recuento máximo de productos para mostrar antes de reemplazar la lista con una lista adaptada");
define('_MI_OLEDRION_PRODUCT_PROPERTY1',"Propiedad del producto 1");
define('_MI_OLEDRION_PRODUCT_PROPERTY2',"Propiedad del producto 2");
define('_MI_OLEDRION_PRODUCT_PROPERTY3',"Propiedad del producto 3");
define('_MI_OLEDRION_PRODUCT_PROPERTY4',"Propiedad del producto 4");
define('_MI_OLEDRION_PRODUCT_PROPERTY5',"Propiedad del producto 5");
define('_MI_OLEDRION_PRODUCT_PROPERTY6', 'Propiedad del producto 6');
define('_MI_OLEDRION_PRODUCT_PROPERTY7', 'Propiedad del producto 7');
define('_MI_OLEDRION_PRODUCT_PROPERTY8', 'Propiedad del producto 8');

define('_MI_OLEDRION_PRODUCT_PROPERTY9', 'Propiedad del producto 9');
define('_MI_OLEDRION_PRODUCT_PROPERTY10', 'Propiedad del producto 10');
define('_MI_OLEDRION_PRODUCT_PROPERTY_TITLE',"Título");
define('_MI_OLEDRION_SEARCH_CATEGORY', 'Mostrar categoría');
define('_MI_OLEDRION_SEARCH_MANUFACTURERS', 'Mostrar Fabricantes');
define('_MI_OLEDRION_SEARCH_VENDORS',"Mostrar vendedores");
define('_MI_OLEDRION_SEARCH_PRICE',"Mostrar precio") ;
define('_MI_OLEDRION_SEARCH_STOCKS',"Mostrar existencias");
define('_MI_OLEDRION_SEARCH_PROPERTY1',"Mostrar propiedad 1");
define('_MI_OLEDRION_SEARCH_PROPERTY2',"Mostrar propiedad 2");
define('_MI_OLEDRION_SEARCH_PROPERTY3',"Mostrar propiedad 3");
define('_MI_OLEDRION_SEARCH_PROPERTY4',"Mostrar propiedad 4");
define('_MI_OLEDRION_SEARCH_PROPERTY5', "Mostrar propiedad 5");
define('_MI_OLEDRION_SEARCH_PROPERTY6', 'Mostrar propiedad 6');
define('_MI_OLEDRION_SEARCH_PROPERTY7', 'Mostrar propiedad 7');
define('_MI_OLEDRION_SEARCH_PROPERTY8', 'Mostrar propiedad 8');
define('_MI_OLEDRION_SEARCH_PROPERTY9', 'Mostrar propiedad');
define('_MI_OLEDRION_SEARCH_PROPERTY10', 'Mostrar propiedad 10');

define('_MI_OLEDRION_CHECKOUT_COUNTRY', 'Mostrar seleccione el país');
define('_MI_OLEDRION_CHECKOUT_COUNTRY_DSC', 'si no se muestra, utilizar de forma predeterminada el país seleccionado en el archivo config.php');

define('_MI_OLEDRION_CHECKOUT_SHIPPING', 'Precio del envío');
define('_MI_OLEDRION_CHECKOUT_SHIPPING_DSC', 'Esta opción solo funciona cuando el nivel de la comprobación es mediano o largo');
define('_MI_OLEDRION_CHECKOUT_SHIPPING_1', 'Precio del envío del producto + Localización precio de entrega');
define('_MI_OLEDRION_CHECKOUT_SHIPPING_2', 'Precio del envío del producto');
define('_MI_OLEDRION_CHECKOUT_SHIPPING_3', 'Localización precio de entrega');

define('_MI_OLEDRION_CHECKOUT_SHIPPING_4', 'Gratis');
define('_MI_OLEDRION_GATEWAY',"Pasarela de pago utilizada el módulo");;

define('_MI_OLEDRION_ASK_BILL', 'Pregunte acerca de la factura');

define('_MI_OLEDRION_CHECKOUT_LEVEL', 'Nivel de Pedido');
define('_MI_OLEDRION_CHECKOUT_LEVEL_1', 'Corto - Información, Confirmar');
define('_MI_OLEDRION_CHECKOUT_LEVEL_2', 'Medio - Información, ubicación, entrega, pago, Confirmar');
define('_MI_OLEDRION_CHECKOUT_LEVEL_3', 'Largo - Información, Embalaje, ubicación, entrega, pago, Confirme');

define('_MI_OLEDRION_SMS_CHECKOUT', '¿Enviar SMS después de la orden de pago?');
define('_MI_OLEDRION_SMS_CHECKOUT_TEXT', 'texto de confirmación de pago por sms');
define('_MI_OLEDRION_SMS_VALIDATE', '¿Enviar SMS después de la orden de validación por admin?');
define('_MI_OLEDRION_SMS_VALIDATE_TEXT', 'Texto de validación por Sms');

define('_MI_OLEDRION_ADMINGROUPS', 'Grupos que tienen acceso a todas las partes del admin');
define('_MI_OLEDRION_ADMINGROUPS_DSC', 'Otros grupos sólo tienen acceso a partes seleccionadas');
define('_MI_OLEDRION_ADMINGROUPS_PARTS', 'Establecer partes solo permitidas para el acceso por grupo seleccionado');


define('_MI_OLEDRION_BREAK_COMMENT_NOTIFICATION', 'Comentarios y Notificaciones');
define('_MI_OLEDRION_BREAK_SEARCH', 'Buscar');
define('_MI_OLEDRION_BREAK_IMAGE', 'Imagen');
define('_MI_OLEDRION_BREAK_CHECKOUT', 'Checkout');
define('_MI_OLEDRION_BREAK_VIEW', 'Ver');
define('_MI_OLEDRION_BREAK_MONEY', 'Dinero');
define('_MI_OLEDRION_BREAK_META', 'Meta');
define('_MI_OLEDRION_BREAK_SMS', 'SMS');
