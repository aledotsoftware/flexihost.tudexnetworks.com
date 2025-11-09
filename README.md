Ayudame a crear un sistema en laravel actualizado con,

1. Sitio web comercial (público)
Objetivo: vender y registrar usuarios.
Secciones principales:
Inicio: mensaje central (“Hosting flexible + automatización inteligente”).
Planes y precios: tabla con planes (Starter, Pro, Business).
Características: PHP, Node, bases de datos, n8n integrado, almacenamiento.
Panel demo / capturas: mostrar el entorno.
Soporte: base de conocimientos + contacto técnico.
Registro / Login: entrada al panel principal.
Dominio: flexihost.tudexnetworks.com
2. Panel web principal (usuarios registrados)
Objetivo: gestión unificada de hosting, datos y automatización.
Módulos mínimos:
Dashboard
Resumen de servicios activos (sitios, bases, flujos n8n, uso de CPU y espacio).
Estado general del sistema.
Gestión de Hosting
Crear / eliminar sitios (PHP, Node).
Deploy desde Git o ZIP.
Logs de errores / acceso.
Certificados SSL automáticos.
Gestión de Bases de Datos
Crear / eliminar DB (MySQL, PostgreSQL).
Usuarios, contraseñas, puertos.
Acceso phpMyAdmin o Adminer integrado.
Gestión de Almacenamiento
Ver espacio usado.
Subir / eliminar archivos.
API o WebDAV opcional.
Automatización (n8n integrado)
Enlace directo al usuario n8n interno (SSO).
Mostrar número de workflows activos / límite (ej. 12/20).
Logs y ejecución reciente.
Botón “Ir al editor n8n”.
Gestión de Máquinas Virtuales (opcional avanzado)
Crear y administrar pequeñas VMs o contenedores.
Mostrar CPU, RAM, tráfico.
Encendido/apagado/reinicio.
Acceso SSH o consola web.
Facturación / Planes
Facturas, métodos de pago, upgrades.
Estado de la suscripción.
Soporte / Tickets
Sistema de tickets o chat técnico.
3. Backend técnico
API REST o GraphQL central.
Integración con:
VM Manager: Proxmox, OpenStack o VMware API.
n8n Instance: control de usuarios y límites vía API.
Hosting Manager: cPanel API, Plesk o panel propio con containers Docker.
DB Manager: scripts automatizados para creación de usuarios y DB.
Storage: MinIO/S3 o NFS.
Flujo ideal
Usuario se registra.
Se crea su cuenta global (panel).
Desde el panel, puede crear sitios, bases y acceder a su usuario n8n.
El sistema orquesta todo sobre las máquinas virtuales base.
