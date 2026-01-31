# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.1] - 2025-04-30
### Fixed
- Fixed trait constant declarations for PHP 8.1 compatibility in PaginationTrait
- Resolved PHP 8.1 deprecation warnings for trait constants

## [2.0.0] - 2024-12-19
### Added
- Added pagination support for text swatches in attribute option management
- Added pagination support for visual swatches in attribute option management
- Implemented dedicated block classes for text and visual swatch option pagination
- Added PaginationTrait to share pagination logic across different swatch types

### Changed
- Restructured module directory from `src/module-attribute-pagination/` to root directory
- Updated module structure to align with Magento 2 best practices
- Improved template organization for different attribute option types

### Fixed
- Fixed colspan calculation for text and visual swatch templates
- Fixed input width consistency across different swatch types
- Fixed current pagination page display in JavaScript pager
- Fixed pagination size handling in templates

## [1.0.6] - 2024-11-12
### Fixed
- Fixed jump-to-page functionality for direct page navigation in attribute option grid

## [1.0.5] - 2024-11-12
### Added
- Added comprehensive pagination support for text and visual swatches
- Implemented swatch-specific pagination templates for improved admin UX with large swatch collections

## [1.0.4] - 2023-09-02
### Fixed
- Fixed requirejs loading error in attribute options template
- Resolved JavaScript module loading issues in admin panel

## [1.0.3] - 2022-10-18
### Fixed
- Fixed handling of null default attribute values in third-party attribute imports
- Added null check validation for attribute default values

## [1.0.2] - 2021-11-24
### Added
- Implemented sort order input field for attribute options replacing drag-and-drop
- Added CHANGELOG.md file to track version history
- Improved performance for managing attributes with 100+ options

### Changed
- Replaced drag-and-drop sorting with manual sort order input field for better scalability

## [1.0.1] - 2021-11-24
### Changed
- Code updates and improvements

## [1.0.0] - 2021-09-26
### Added
- Initial release of Attribute Option Pagination module
- Implemented server-side pagination for attribute options with 100+ entries in Magento admin panel
- Added JavaScript-based pager component for seamless navigation through large attribute option lists
- Enabled efficient management of dropdown attributes with hundreds of options
- Reduced admin panel page load times for attributes with extensive option sets
- Added LESS styling for pagination interface in attribute option management
