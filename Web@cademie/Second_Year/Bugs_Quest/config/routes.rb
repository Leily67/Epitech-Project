Rails.application.routes.draw do
  
  get '/admin', to: 'pages#home', as: 'home'
  # home
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Defines the root path route ("/")
  # root "articles#index"


  # Routes pour le modèle PNJ
  resources :pnjs

  # Routes pour le modèle OBJET
  resources :objets

  # Routes pour les modèles QUEST et ETAPES
  resources :quests do
    resources :etapes, except: [:index]
  end

  # Routes pour le modèle JOUEUR
  resources :joueurs, :path =>'/' do
    member do
      get 'start_quest'
    end
  end

end
