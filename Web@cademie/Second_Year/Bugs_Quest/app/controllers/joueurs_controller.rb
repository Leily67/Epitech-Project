class JoueursController < ApplicationController
    def index
        @joueurs = Joueur.all
    end

    def show
        @joueur = Joueur.find(params[:id])
    end

    def new
      @joueur = Joueur.new
    end

    def create
        @joueur = Joueur.new(create_joueur_params)

        if @joueur.save
            redirect_to @joueur, notice: 'Le joueur a été créé avec succès.'
        else
            render :new
        end
    end

    def edit
        @joueur = Joueur.find(params[:id])
    end

    def update
        @joueur = Joueur.find(params[:id])
        somme_carac_avant = @joueur.vie + @joueur.force
        somme_point_avant = @joueur.vie + @joueur.force + @joueur.points
        @joueur.vie = update_joueur_params[:vie]
        @joueur.force = update_joueur_params[:force]

        somme_carac_apres = @joueur.vie + @joueur.force
        @joueur.points = somme_point_avant - somme_carac_apres

        somme_point_apres = @joueur.vie + @joueur.force + @joueur.points
        if somme_carac_avant < somme_carac_apres && somme_point_avant == somme_point_apres && @joueur.points >= 0
            @joueur.save
        end

        redirect_to @joueur
    end

    def destroy
        @joueur = Joueur.find(params[:id])
        @joueur.destroy
        redirect_to joueurs_path, notice: 'La quête a été supprimé avec succès.'
      end

    def start_quest
        @joueur = Joueur.find(params[:id])
        @pnj = Pnj.first
    
        Quest.start(@joueur, @pnj) 
    
        redirect_to @joueur
    end  

    def update_joueur_params
        params.require(:joueur).permit(:vie, :force)
    end

    def create_joueur_params
        params.require(:joueur).permit(:name).merge({niveau: 1, force: 10, vie: 10, xp: 0, mort: false, points: 10})
    end
end