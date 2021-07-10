import Home from './components/Home';
import About from './components/About';
import Website from './components/Website';
import Grafic from './components/Grafic';
import NotFound from './components/NotFound';
import Photo from './components/Photo';



export default{
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes:[
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: 'home'
        },
        {
            path: '/website',
            component: Website,
            name: 'website'
        },
        {
            path: '/grafic',
            component: Grafic,
            name: 'grafic'
        },
        {
            path: '/about',
            component: About,
            name: 'about'
        },
        {
            path: '/photo',
            component: Photo,
            name: 'photo'
        },

    ]
};
