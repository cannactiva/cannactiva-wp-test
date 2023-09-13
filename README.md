# Instrucciones para la Prueba de Nivel

## Objetivo
Implementar una funcionalidad en Woocommerce que permita gestionar y aplicar los impuestos en productos y en gastos de envío en función del rol del usuario y el país de destino.

## Pasos

1. **Preparación del Entorno**: 
   - Comienza estableciendo el entorno con Docker, descargar la siguiente image: [Docker Prueba Nivel WordPress Cannaciva](https://www.xxxx.com)
   - Ten presente que la configuración de productos e impuestos ya está preestablecida en esta imagen de Docker.

2. **Desarrollo**: 
   - Una vez que el entorno esté activo, procede con el desarrollo de la funcionalidad.
   - Debes operar dentro del contexto del entorno preconfigurado proporcionado.

## Configuración del entorno

### Impuesto según producto:
- **Estándar**: Todos los productos excepto los de alimentación.
- **Reducido**: Los productos de alimentación.

### Impuesto a aplicar según rol:
- **Estándar**: 21% IVA en España *
- **Reducido**: 10% IVA en España *
- **Tasa Cero**: 0% IVA en España *
- **Tasas con Recargo de Equivalencia**
  - Estándar: 26.2% IVA
  - Reducido: 11.4% IVA
  - Tasa Cero: 0% IVA 
  > *En la tabla de impuestos de Woocommerce aparecerán los diferentes impuestos según país. Trabajaremos con unos pocos ejemplos que ya vienen configurados.

### Roles Woocommerce:				
- **Clientes Finales**: Se aplica el impuesto Estándar
- **Dropshipper**: Se aplica el impuesto Estándar
- **Dropshipper EU**: Se aplica el impuesto Tasa cero
- **Dropshipper RE**: Se aplica el impuesto Tasa con Recargo de Equivalencia
