import { CalendarCheck, Gauge, UsersRound, Wrench } from 'lucide-react'
import { StatsStrip } from '../common/StatsStrip'

const stats = [
  { value: '10+', label: 'rokov skúseností', icon: CalendarCheck },
  { value: '300+', label: 'LED projektov', icon: UsersRound },
  { value: 'FVE do 1 MW', label: 'realizované projekty', icon: Gauge },
  { value: 'Kompletný servis', label: 'od návrhu po prevádzku', icon: Wrench },
]

export function Stats() {
  return <StatsStrip items={stats} label="AXIS v číslach" />
}
