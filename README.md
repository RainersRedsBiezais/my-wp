# Wunder Hello WordPress Theme

A modern, responsive WordPress theme built with Tailwind CSS and featuring a clean, modular architecture.

## 🚀 Features Added

### **Modular Template Architecture**
- **Refactored `index.php`** - Clean, readable main template using `get_template_part()`
- **Extracted Components:**
  - `hero-slider.php` - Tailwind CSS showcase slider
  - `services-overview.php` - Services grid with Tailwind features
  - `featured-posts.php` - Featured blog posts section
  - `recent-projects.php` - Recent projects grid
  - `main-content.php` - Main content area with sidebar

### **Individual Content Templates**
- **`single.php`** - Enhanced individual blog post display with:
  - Post header with metadata
  - Featured image support
  - Tags and categories display
  - Previous/next post navigation
  - Responsive design

- **`page.php`** - Individual page template with:
  - Page header with last updated date
  - Reading time indicator
  - Subpages display (for hierarchical pages)
  - Breadcrumb navigation
  - Featured image support

- **`single-project.php`** - Enhanced project display with:
  - Project metadata and header
  - Featured image support
  - Project URL call-to-action section
  - Previous/next project navigation

### **Custom Post Type: Projects**
- **Full CPT Implementation** with admin interface
- **Custom Meta Fields** for project URLs
- **Archive Support** with custom templates
- **Admin Integration** with meta boxes

### **Modern UI/UX**
- **Tailwind CSS Integration** for consistent styling
- **Responsive Design** that works on all devices
- **Professional Typography** and spacing
- **Interactive Elements** with hover effects
- **Accessible Design** with semantic HTML
- **Translation Ready** with proper text domains

## 📋 Projects Custom Post Type Usage

### **Creating a New Project**

1. **Navigate to Projects** in WordPress Admin
   - Go to `Projects` → `Add New` in the admin sidebar

2. **Fill in Project Details:**
   - **Title** - Project name
   - **Content** - Project description and details
   - **Featured Image** - Project screenshot or hero image
   - **Excerpt** - Short project summary (optional)

3. **Add Project URL:**
   - In the **Project URL** meta box (right sidebar)
   - Enter the live project URL (e.g., `https://example.com`)
   - This will create a "Visit Project" button on the frontend

4. **Publish** the project

### **Project Display**

Projects automatically appear in:
- **Homepage** - Recent projects grid (shows 6 latest projects)
- **Individual Project Pages** - Full project details with URL button
- **Projects Archive** - All projects listing page

### **Project Features**

- **Featured Images** - Displayed prominently on project cards and single pages
- **Project URLs** - External links to live projects
- **Navigation** - Previous/next project navigation
- **Responsive Cards** - Clean grid layout on all devices
- **Admin Management** - Full WordPress admin integration

## 🛠️ Setup Instructions

### **Prerequisites**
- WordPress 5.0+ 
- PHP 7.4+
- DDEV (for local development)

### **Installation**

1. **Clone the Repository**
   ```bash
   git clone [your-repo-url] my-wp
   cd my-wp
   ```

2. **DDEV Setup** (if using DDEV)
   ```bash
   ddev start
   ddev import-db [database-file]
   ```

3. **WordPress Setup**
   - Access your WordPress site
   - Go to `Appearance` → `Themes`
   - Activate "Wunder Hello" theme

### **Theme Configuration**

1. **Menus**
   - Go to `Appearance` → `Menus`
   - Create and assign menus to "Primary Menu" and "Footer Menu"

2. **Widgets**
   - Go to `Appearance` → `Widgets`
   - Add widgets to "Sidebar" and "Footer Column" areas

3. **Customizer**
   - Go to `Appearance` → `Customize`
   - Configure theme options as needed

### **Development Setup**

1. **Node.js Dependencies** (if modifying Tailwind)
   ```bash
   npm install
   ```

2. **Tailwind CSS Build**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

3. **File Structure**
   ```
   wp-content/themes/wunder-hello/
   ├── assets/
   │   ├── css/
   │   └── js/
   ├── src/
   │   └── input.css
   ├── *.php (template files)
   ├── style.css
   └── functions.php
   ```

### **Git Configuration**

The project includes a comprehensive `.gitignore` that excludes:
- DDEV configuration files
- WordPress uploads and media
- Node modules and build files
- Sensitive configuration files
- Local development files

## 🎨 Customization

### **Styling**
- **Tailwind CSS** - Modify `src/input.css` for custom styles
- **Template Files** - Edit individual PHP templates
- **Functions** - Add custom functionality in `functions.php`

### **Adding New Sections**
1. Create a new PHP file (e.g., `new-section.php`)
2. Add the section content
3. Include it in `index.php` using `get_template_part('new-section')`

### **Projects Customization**
- **Meta Fields** - Add new fields in `functions.php`
- **Display** - Modify `single-project.php` and `recent-projects.php`
- **Archive** - Customize `archive-project.php`

## 📁 File Structure

```
wunder-hello/
├── assets/
│   ├── css/
│   └── js/
│       └── theme.js
├── src/
│   └── input.css
├── components/
│   ├── hero-slider.php
│   ├── services-overview.php
│   ├── featured-posts.php
│   ├── recent-projects.php
│   └── main-content.php
├── templates/
│   ├── single.php
│   ├── page.php
│   ├── single-project.php
│   └── archive-project.php
├── functions.php
├── index.php
├── style.css
├── package.json
└── tailwind.config.js
```

## 🔧 Technical Details

### **WordPress Features**
- **Title Tag Support**
- **Post Thumbnails**
- **HTML5 Markup**
- **Navigation Menus**
- **Widget Areas**
- **Custom Post Types**

### **Performance**
- **Optimized Queries** - Efficient database queries
- **Responsive Images** - Proper image sizing
- **Clean Code** - Modular, maintainable structure
- **CDN Ready** - External asset loading

### **Browser Support**
- **Modern Browsers** - Chrome, Firefox, Safari, Edge
- **Mobile Responsive** - All screen sizes
- **Accessibility** - WCAG compliant

## 📞 Support

For questions or issues:
1. Check the WordPress documentation
2. Review the theme files and comments
3. Test in a staging environment first

## 📄 License

This theme follows WordPress theme development standards and is ready for production use.

---

**Version:** 1.0.0  
**Last Updated:** 2024  
**WordPress Compatibility:** 5.0+  
**PHP Version:** 7.4+
