class CreateProgress < ActiveRecord::Migration[7.0]
  def change
    create_table :progresses do |t|
      t.boolean :done
      t.integer :numero_etape
      t.integer :type
      t.integer :vie
      t.integer :vie_pnj
      t.belongs_to :joueur
      t.belongs_to :quest

      t.timestamps
    end
  end
end
