# Configuración del entorno (SETUP)

## Requisitos previos
- **Node.js** (v18 o superior)
- **npm** (v9 o superior) o **pnpm**
- **Git**
- Sistema operativo: Windows (el proyecto está pensado para Windows, pero funciona en macOS/Linux).

## Pasos de instalación
1. **Clonar el repositorio**
   ```bash
   git clone <url-del-repositorio>
   cd "Instituto SM/ISM"
   ```
2. **Instalar dependencias**
   ```bash
   npm install   # o pnpm install
   ```
3. **Configurar variables de entorno**
   Copia el archivo de ejemplo y modifica según sea necesario:
   ```bash
   copy .env.example .env
   ```
   Edita `.env` con tu editor favorito.
4. **Compilar / Ejecutar**
   ```bash
   npm run dev   # inicia el proyecto en modo desarrollo
   ```
5. **Tests**
   ```bash
   npm test
   ```

## Herramientas recomendadas
- VS Code con extensiones de **Prettier** y **ESLint**.
- **Git GUI** (SourceTree, GitKraken) si prefieres UI.

---
> **Tip:** Si encuentras problemas en la instalación, revisa la sección [Troubleshooting](docs/troubleshooting.md) (próximamente).
