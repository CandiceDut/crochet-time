import { Routes } from '@angular/router';
import { AccueilComponent } from './components/accueil/accueil.component';
import { PanierComponent } from './components/panier/panier.component';
import { AdminComponent } from './components/admin/admin.component';

export const routes: Routes = [
    { 
        path: 'accueil', 
        component: AccueilComponent
    },
    { 
        path: 'panier', 
        component: PanierComponent
    },
    { 
        path: 'admin', 
        component: AdminComponent
    },
    { path: '', redirectTo: 'accueil', pathMatch: 'full' }
];
