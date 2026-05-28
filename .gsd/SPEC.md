# SPEC.md — Project Specification

> **Status**: `FINALIZED`

## Vision
A sleek, powerful, and professional visual email designer plugin for Filament v4 and v5. It allows developers and administrators to manage responsive, beautiful HTML email templates inside their Filament dashboard using Unlayer, and send them using standard Laravel Mailables via a simple trait.

## Goals
1. **Visual Editing:** Embed the Unlayer drag-and-drop editor seamlessly in Filament form layouts, allowing users to build responsive emails without touching code.
2. **Dynamic Placeholders:** Support dynamic subject and body variables using merge tags and standard/URL-encoded `{{placeholder}}` syntax.
3. **Mailable Integration:** Enable seamless integration with Laravel's native mail system using a reusable trait that dynamically replaces variables and compiles subjects via Blade at send-time.
4. **Customizable Sidebar Navigation:** Allow developers to easily modify the navigation group, icons, sorting, and template badges of the admin resource from their Filament panel configuration.

## Non-Goals (Out of Scope)
- Built-in SMTP/sending server configuration or logging (delegated to Laravel's native Mail system).
- Creating custom Unlayer templates or hosting a custom Unlayer builder locally (relies on Unlayer CDN).
- An elaborate permission role manager inside the package itself (relies on Filament's native resource authorization).

## Users
- **Administrators / Content Creators:** Design templates visually inside the Filament admin panel using drag-and-drop components, configure template keys, and define subject lines.
- **Developers:** Reference unique template keys inside code, pass relevant template variables, and send emails using standard Laravel Mailables with the `HasEmailTemplate` trait.

## Constraints
- **PHP Version:** PHP `^8.2` or higher.
- **Laravel Version:** Laravel `^11.0`, `^12.0`, or `^13.0`.
- **Filament Version:** Filament `^4.0` or `^5.0`.
- **External Network Dependence:** Requires active internet access in the browser to load Unlayer's embedded JS editor from `https://editor.unlayer.com/embed.js`.
- **Feature Restrictions without Project ID:** Dynamic dark mode themes and image uploads inside the Unlayer editor canvas require a valid `UNLAYER_PROJECT_ID` config.

## Success Criteria
- [x] Admin can create, read, update, and delete email templates.
- [x] Filament form renders the Unlayer visual editor without JS console errors.
- [x] Unlayer editor exports both the template design JSON and compiled HTML, saving them successfully to the database.
- [x] Developers can bind the `HasEmailTemplate` trait to a Laravel Mailable, set `templateKey` and `templateVariables`, and dispatch emails successfully.
- [x] Mail template body correctly substitutes placeholders with values, supporting standard and URL-encoded formatting safely.
- [x] Email subject rendering supports dynamic Blade variables.
