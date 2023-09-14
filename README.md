# Instrucciones para la Prueba de Nivel

## Objetivo
Implementar una funcionalidad en Woocommerce que permita gestionar y aplicar los impuestos (IVA) en productos y en gastos de envío en función del rol del usuario y el país de destino.

## Pasos

1. **Preparación del Entorno**: 
   - Descargar el proyecto des de este repositorio y crear un entorno de trabajo. En la carpeta BBDD encontrás la base de datos y una carpeta con la misma pero exportada con Duplicator.

2. **Desarrollo**: 
   - Una vez que el entorno esté activo, procede con el desarrollo de la funcionalidad.
   - Debes operar dentro del contexto del entorno preconfigurado proporcionado.

## Configuración del entorno

### Impuestos predeterminados según producto:
- **Estándar**: Todos los productos excepto los de alimentación.
- **Reducido**: Los productos de alimentación.

### Todos los impuestos: 
- **Estándar**: 21% IVA 
- **Reducido**: 10% IVA 
- **Tasa Cero**: 0% IVA 
- **Tasas con Recargo de Equivalencia**
  - Estándar: 26.2% IVA
  - Reducido: 11.4% IVA

### Roles Woocommerce:				
- **Clientes Finales**
- **Dropshipper**
- **Dropshipper EU** 
- **Dropshipper RE** 

### Aplicación de impuesto en producto y envío según rol:				
- **Clientes Finales**: 
Se aplica el impuesto Estándar o reducido según el tipo de producto.
- **Dropshipper**: 
Se aplica el impuesto Estándar o reducido según el tipo de producto.
- **Dropshipper EU**: 
Se aplica el impuesto Tasa cero.
- **Dropshipper RE**: 
Se aplica el impuesto Tasa con Recargo de Equivalencia, estándar o reducido según el tipo de producto.


