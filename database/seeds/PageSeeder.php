<?php

use App\Page;
use App\Row;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = factory(Page::class)->create(['slug' => 'home']);
        $home->row()->save(new Row);

        //Nabvar
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'navbar_home',
            'value' => 'Home',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'navbar_contact',
            'value' => 'Contact',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'navbar_login',
            'value' => 'Login',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'navbar_signup',
            'value' => 'Sign Up',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'navbar_logout',
            'value' => 'Logout',
        ]);

        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'navbar_home',
            'value' => 'Inicio',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'navbar_contact',
            'value' => 'Contacto',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'navbar_login',
            'value' => 'Inicio de Sesión',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'navbar_signup',
            'value' => 'Registro',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'navbar_logout',
            'value' => 'Cerrar Sesión',
        ]);

        //Header
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'header_title',
            'value' => 'WEB APPLICATION DEVELOPMENT',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'header_title',
            'value' => 'desarrollo de aplicaciones web',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'header_subtitle',
            'value' => 'IT Professional graduated in Nueva Esparta University in Venezuela, more than 15 yeas of experience developing high performance applications',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'header_subtitle',
            'value' => 'Profesional de Sistemas graduado en la Universidad Nueva Esparta en Venezuela, con más de 15 años de experiencia en el desarrollo de aplicaciones de alto rendimiento.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'header_button',
            'value' => 'free consultation',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'header_button',
            'value' => 'Consulta gratis',
        ]);

        //Intro
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'intro_title',
            'value' => 'a few words about me',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'intro_title',
            'value' => 'algunas palabras sobre mi',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'intro_content',
            'value' => 'In last years I have worked with Laravel framework for the backend, PHPUnit for test-driven development, Vue.js as javascript framework for the frontend, Bootstrap, Vuetify and Sass for manage styles sheets',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'intro_content',
            'value' => 'En los últimos años he trabajado con el Framework Laravel para el backend, PHPUnit para el desarrollo guiado por pruebas, Vue.js como Framework de Javascript para el frontend y para para administrar los estilos Bootstrap, Vuetify y Sass.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'intro_close',
            'value' => 'Finally using continuous integration, like Codeship or travis CI, the customer receive a quality tested product.',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'intro_close',
            'value' => 'Finalmente, utilizando una integración continua, tales como Codeship o Travis CI, el cliente recibe un producto de calidad comprobada.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'intro_button',
            'value' => 'Read More',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'intro_button',
            'value' => 'Leer más',
        ]);

        //Services
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'services_title',
            'value' => 'Services',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'services_title',
            'value' => 'Servicios',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service1_title',
            'value' => 'Planification',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service1_title',
            'value' => 'Planificación',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service1_description',
            'value' => 'Before start any project, it´s analyzed, the customer gets a service proposal with requested requirements, activities and project timeline',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service1_description',
            'value' => 'Antes de iniciar cualquier proyecto, es analizado, el cliente recibe una propuesta de servicio con los requisitos, actividades y cronograma del proyecto solicitados.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service2_title',
            'value' => 'Configuration',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service2_title',
            'value' => 'Configuración',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service2_description',
            'value' => "All develop has a platform previous configuration, it's included in service proposal",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service2_description',
            'value' => 'Todo desarrollo tiene una plataforma de configuración previa, se incluye en la propuesta de servicio.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service3_title',
            'value' => 'Web development',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service3_title',
            'value' => 'Desarrollo web',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service3_description',
            'value' => "Fullstack web development, test-driven and continuous integration, supported by new development technologies.",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service3_description',
            'value' => 'Desarrollo web Fullstack, basado en pruebas y integración continua, respaldado por nuevas tecnologías de desarrollo.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service4_title',
            'value' => 'Api Integration',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service4_title',
            'value' => "Integracion con API's",
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service4_description',
            'value' => "Integration with the most popular API's like Google, Facebook, Instagram, Paypal, Taxjar, GoShippo, USPS, Fedex.",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service4_description',
            'value' => 'Integración con las API más populares como Google, Facebook, Instagram, Paypal, Taxjar, GoShippo, USPS, Fedex.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service5_title',
            'value' => 'Database Design',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service5_title',
            'value' => 'Diseño de Base de Datos',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service5_description',
            'value' => "Designing Relational database using the most popular Databases Engines MySQL, SQL Server, ORACLE, DB2, etc.",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service5_description',
            'value' => 'Diseño de base de datos relacional utilizando los más populares motores de bases de datos MySQL, SQL Server, ORACLE, DB2, etc.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service6_title',
            'value' => 'Responsive Design',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service6_title',
            'value' => "Diseño Adaptable",
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service6_description',
            'value' => "All web applications are tested to works in all devices sizes and platforms.",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service6_description',
            'value' => 'Todas las aplicaciones web están probadas para funcionar en todos los dispositivos y plataformas.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service7_title',
            'value' => 'Gelocation',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service7_title',
            'value' => 'Geolocalización',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service7_description',
            'value' => "Using advanced techniques, we can select content depending on client geolocation.",
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service7_description',
            'value' => 'Usando técnicas avanzadas, podemos seleccionar contenido dependiendo de la geolocalización del cliente.',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service8_title',
            'value' => 'EVENTS/JOBS/QUEUES',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service8_title',
            'value' => 'Eventos/Trabajos/Colas',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'service8_description',
            'value' => 'Jobs, queues, events configuration to give more power to web applications.',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'service8_description',
            'value' => 'Configuración de trabajos, colas y eventos para dar más poder a las aplicaciones web.',
        ]);

        //Consulting
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'consulting_title',
            'value' => 'DO YOU NEED A CONSULTATION?',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'consulting_title',
            'value' => '¿Necesita una consultoría?',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'consulting_subtile',
            'value' => 'Ask without compromise, I will respond you soon',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'consulting_subtile',
            'value' => 'Pregunte sin compromiso, responderé muy pronto',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'consulting_button',
            'value' => 'Read More',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'consulting_button',
            'value' => 'Leer más',
        ]);

        //Latest projects
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'blog_title',
            'value' => 'Latest Projects',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'blog_title',
            'value' => 'Últimos Proyectos',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'blog_button',
            'value' => 'View all projects',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'blog_button',
            'value' => 'Ver todos los Proyectos',
        ]);

        //Tools
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tools_title',
            'value' => 'Tools',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tools_title',
            'value' => 'Herramientas',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool1_name',
            'value' => 'PHP: Scripting Language',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool1_name',
            'value' => 'PHP: Lenguaje de Programación',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool2_name',
            'value' => 'Laravel: PHP framework',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool2_name',
            'value' => 'Laravel: Framework de PHP',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool3_name',
            'value' => 'Vue.js: Javascript Framework',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool3_name',
            'value' => 'Vue.js: Framework de Javascript',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool4_name',
            'value' => 'Bootstrap: HTML, CSS and Javascript Framework',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool4_name',
            'value' => 'Bootstrap: Framework de HTML, CSS and Javascript',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool5_name',
            'value' => 'Git: Version Control System',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool5_name',
            'value' => 'Git: Sistema de Control de Versiones',
        ]);
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'tool6_name',
            'value' => 'PHPUnit: Unit Testing Framework',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'tool6_name',
            'value' => 'PHPUnit: Framework de Pruebas Unitarias',
        ]);

        //Footes
        $home->row->translations()->create([
            'language_id' => 1,
            'key' => 'footer_rights',
            'value' => 'All Rights Reserved',
        ]);
        $home->row->translations()->create([
            'language_id' => 2,
            'key' => 'footer_rights',
            'value' => 'Todos los Derechos Reservados',
        ]);

        //Contact Page
        $contact = factory(Page::class)->create(['slug' => 'contact']);
        $contact->row()->save(new Row);

        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'title',
            'value' => 'Contact',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'title',
            'value' => 'Contacto',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'intro',
            'value' => 'You can contact me any way that is convenient for you. I am available 24/7 via email. You can also use this quick contact form.',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'intro',
            'value' => 'Puede contactarme de cualquier manera que le sea conveniente. Estoy disponible 24/7 a través del correo electrónico. También puede utilizar éste formulario de contacto.',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'first_name',
            'value' => 'First Name',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'first_name',
            'value' => 'Nombre',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'last_name',
            'value' => 'Last Name',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'last_name',
            'value' => 'Apellido',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'email',
            'value' => 'E-mail',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'email',
            'value' => 'Correo Electrónico',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'phone',
            'value' => 'Phone',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'phone',
            'value' => 'Teléfono',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'message',
            'value' => 'Message',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'message',
            'value' => 'Mensaje',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'button',
            'value' => 'Send Message',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'button',
            'value' => 'Enviar Mensaje',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'location',
            'value' => 'Location',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'location',
            'value' => 'Ubicación',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'work_hours',
            'value' => 'Work Hours',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'work_hours',
            'value' => 'Horario Laboral',
        ]);
        $contact->row->translations()->create([
            'language_id' => 1,
            'key' => 'work_hours_desc',
            'value' => 'Mon–Fri: 8:00 am–5:00 pm',
        ]);
        $contact->row->translations()->create([
            'language_id' => 2,
            'key' => 'work_hours_desc',
            'value' => 'Lun-Vie: 8:00 am–5:00 pm',
        ]);

        //Blog Page
        $blog = factory(Page::class)->create(['slug' => 'blog']);
        $blog->row()->save(new Row);

        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'search',
            'value' => 'Search',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'search',
            'value' => 'Buscar',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'archive',
            'value' => 'Archive',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'archive',
            'value' => 'Post Anteriores',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'all_posts',
            'value' => 'All Posts',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'all_posts',
            'value' => 'Todos los Posts',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'about',
            'value' => 'About me',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'about',
            'value' => 'Acerca de mi',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'about_content',
            'value' => 'IT Professional graduated in Nueva Esparta University in Venezuela, more than 15 yeas of experience developing high performance applications. In last years I have worked with Laravel framework for the backend, PHPUnit for test-driven development, Vue.js as javascript framework for the frontend, bootstrap and Sass for manage styles sheets. Finally using continuos integration, like Codeship or travis CI, the customer receive a quality tested product',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'about_content',
            'value' => 'Profesional de TI graduado en la Universidad Nueva Esparta en Venezuela, con más de 15 años de experiencia en el desarrollo de aplicaciones de alto rendimiento. En los últimos años he trabajado con Laravel Framework para el backend, PHPUnit para el desarrollo guiado por pruebas, Vue.js como javascript framework para el frontend, bootstrap y Sass para administrar hojas de estilos. Finalmente, utilizando una integración continua, como Codeship o Travis CI, el cliente recibe un producto de calidad comprobada.',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'not_found',
            'value' => 'Sorry, But Posts Was not Found',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'not_founnd',
            'value' => 'Lo sentimos, ne se encontraron posts',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'add_post',
            'value' => 'New post',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'add_post',
           'value' => 'Crear Nuevo Post',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'button',
            'value' => 'Read More',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'button',
           'value' => 'Leer Más',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'categories',
            'value' => 'Categories',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'categories',
           'value' => 'Categorías',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'all_categories',
            'value' => 'All Categories',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'all_categories',
           'value' => 'Todas las Categorías',
        ]);
        $blog->row->translations()->create([
            'language_id' => 1,
            'key' => 'author',
            'value' => 'by',
        ]);
        $blog->row->translations()->create([
            'language_id' => 2,
            'key' => 'author',
           'value' => 'por',
        ]);

        $auth = factory(Page::class)->create(['slug' => 'auth']);
        $auth->row()->save(new Row);

        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'login',
            'value' => 'Login',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'login',
            'value' => 'Inicio de Sesión',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'signup',
            'value' => 'Register',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'signup',
            'value' => 'Registrar',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'name',
            'value' => 'Name',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'name',
            'value' => 'Nombre',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'email',
            'value' => 'E-mail',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'email',
            'value' => 'Correo Electrónico',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'password',
            'value' => 'Password',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'password',
            'value' => 'Contraseña',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'confirm_password',
            'value' => 'Confirm Password',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'confirm_password',
            'value' => 'Repetir Contraseña',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'button',
            'value' => 'Sign in',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'button',
            'value' => 'Iniciar sesión',
        ]);
        $auth->row->translations()->create([
            'language_id' => 1,
            'key' => 'signup_button',
            'value' => 'Sign up',
        ]);
        $auth->row->translations()->create([
            'language_id' => 2,
            'key' => 'signup_button',
            'value' => 'Registrar',
        ]);
    }
}





